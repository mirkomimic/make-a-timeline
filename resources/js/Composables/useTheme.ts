import { ref, onMounted, watch } from "vue";
import { themeChange } from "theme-change";

export function useTheme() {
  const THEMES = {
    LIGHT: "garden",
    DARK: "dim",
  } as const;

  type Theme = (typeof THEMES)[keyof typeof THEMES];

  const getInitialTheme = (): Theme =>
    localStorage.getItem("theme") === THEMES.LIGHT ? THEMES.LIGHT : THEMES.DARK;

  const theme = ref<Theme>(getInitialTheme());

  const isChecked = ref(theme.value === THEMES.DARK);

  onMounted(() => {
    themeChange(false);
  });

  watch(theme, (newTheme) => {
    localStorage.setItem("theme", newTheme);
    themeChange(false);
    document.documentElement.setAttribute("data-theme", newTheme);

    isChecked.value = newTheme === THEMES.DARK;
  });

  const setTheme = (val: Theme) => {
    theme.value = val;
  };

  const toggleTheme = (): void => {
    setTheme(theme.value === THEMES.LIGHT ? THEMES.DARK : THEMES.LIGHT);
  };

  return { theme, isChecked, toggleTheme };
}
